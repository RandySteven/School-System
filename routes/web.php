<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DegreeTeacherController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserClassroomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserExtracurricularController;
use App\Http\Controllers\UserSubjectController;
use App\Models\Classroom;
use App\Models\Degrees;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    //Classrooms
    Route::prefix('classrooms')->group(function(){
        Route::get('', [ClassroomController::class, 'index'])->name('classroom.index');
        Route::get('create', [ClassroomController::class, 'create'])->name('classroom.create');
        Route::post('create', [ClassroomController::class, 'store'])->name('classroom.store');
        Route::get('show/{classroom:slug}', [ClassroomController::class, 'show'])->name('classroom.show');
        Route::delete('delete/{classroom:slug}', [ClassroomController::class, 'delete'])->name('classroom.delete');
    });

    //Subject
    Route::prefix('subjects')->group(function(){
        Route::get('', [SubjectController::class, 'index'])->name('subject.index');
        Route::get('create', [SubjectController::class, 'create'])->name('subject.create');
        Route::post('create', [SubjectController::class, 'store'])->name('subject.store');
        Route::delete('delete/{subject:slug}', [SubjectController::class, 'delete'])->name('subject.delete');
        Route::get('{subject:slug}', [SubjectController::class, 'show'])->name('subject.show');

        //Material
        Route::prefix('material')->group(function(){
            Route::post('create', [MaterialController::class, 'store'])->name('material.store');
            Route::get('{material:title}', [MaterialController::class, 'show'])->name('material.show');
            Route::get('download/{material:material_file}', [MaterialController::class, 'download'])->name('download');
        });

        //Student
    });
    Route::get('/student-subject/', [UserSubjectController::class, 'subjects'])->name('subject.student.subjects');

    //Major
    Route::get('major/{major:slug}', [MajorController::class, 'show'])->name('major.show');
    Route::get('classroom-major/{major:slug}', [MajorController::class, 'classroom'])->name('major.classroom');

    //Level
    Route::get('level/{level:slug}', [LevelController::class, 'show'])->name('level.show');

    //Teacher
    Route::prefix('/teachers')->group(function(){
        Route::get('', [UserController::class, 'teacher'])->name('teacher');
        Route::get('/edit/{user:name}', [TeacherController::class, 'edit'])->name('teacher.edit');
        Route::patch('/update/{user:name}', [TeacherController::class, 'update'])->name('teacher.update');
    });


    //Extracurricular
    Route::prefix('extracurriculars')->group(function(){
        Route::get('', [ExtracurricularController::class, 'index'])->name('extracurricular.index');
        Route::get('create', [ExtracurricularController::class, 'create'])->name('extracurricular.create');
        Route::post('create', [ExtracurricularController::class, 'store'])->name('extracurricular.store');
        Route::get('show/{extracurricular:slug}', [ExtracurricularController::class, 'show'])->name('extracurricular.show');
    });

    //Forum
    Route::prefix('forums')->group(function(){
        Route::get('', [ForumController::class, 'index'])->name('forum.index');
        Route::get('create', [ForumController::class, 'create'])->name('forum.create');
        Route::post('create', [ForumController::class, 'store'])->name('forum.store');
        Route::get('show/{forum:slug}', [ForumController::class, 'show'])->name('forum.show');

        //Comment
        Route::post('comment', [CommentController::class, 'comment'])->name('comment');
        Route::post('reply', [CommentController::class, 'reply'])->name('reply');
    });

    //Library
    Route::prefix('libraries')->group(function(){
        Route::get('', [LibraryController::class, 'show'])->name('library.show');

        //Book
        Route::prefix('books')->group(function(){
            Route::get('', [BookController::class, 'index'])->name('book.index');
            Route::get('create', [BookController::class, 'create'])->name('book.create');
            Route::post('create', [BookController::class, 'store'])->name('book.store');
            Route::get('show/{book:slug}', [BookController::class, 'show'])->name('book.show');
            Route::delete('delete/{book:slug}', [BookController::class, 'delete'])->name('book.delete');

            Route::get('writter-name/{book:writter_name}', [BookController::class, 'writter'])->name('book.writter');
            Route::get('category/{category:slug}', [CategoryController::class, 'show'])->name('category');
        });
    });

    //admin
    Route::middleware('role:admin')->group(function(){
        Route::get('admin-dashboard', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/create-class-user', [UserClassroomController::class, 'create'])->name('classroom.user.create');
        Route::post('/create-class-user', [UserClassroomController::class, 'store'])->name('classroom.user.store');
        Route::delete('/delete-user-from-class', [UserClassroomController::class, 'delete'])->name('classroom.user.delete');

        Route::get('/create-subject-student', [UserSubjectController::class, 'createStudent'])->name('subject.user.student.create');
        Route::get('/create-subject-teacher', [UserSubjectController::class, 'createTeacher'])->name('subject.user.teacher.create');
        Route::post('/create-subject-user', [UserSubjectController::class, 'store'])->name('subject.user.store');

    });

    Route::middleware('role:teacher')->group(function(){
        Route::get('/add-data-teacher', [TeacherController::class, 'add'])->name('add.data.to.teacher');
        Route::post('/add-data-teacher', [TeacherController::class, 'store'])->name('store.data.to.teacher');
    });

    Route::middleware('role:student')->group(function(){
        Route::get('/add-data-student', [StudentController::class, 'add'])->name('add.data.to.student');
        Route::patch('/add-data-student', [StudentController::class, 'store'])->name('store.data.to.student');

        Route::post('/create-extracurricular-user', [UserExtracurricularController::class, 'store'])->name('extracurricular.user.store');
    });

    //Search
    Route::get('/search/', [SearchController::class, 'forum'])->name('search.forum');
});


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
