<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cuestionario', [QuizzController::class, 'index'])->name('quizz.index');
    Route::get('/cuestionarioList', [QuizzController::class, 'show'])->name('quizz.show');
    Route::post('/cuestionario', [QuizzController::class, 'store'])->name('quizz.create');
    Route::delete('/cuestionario/{id}', [QuizzController::class, 'destroy'])->name('quizz.destroy');


    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/principal', function () {return view('pages.principal');	});
    Route::get('/estres', function () {return view('pages.estres'); });
    Route::get('/musica', function () {return view('pages.musica');	});
    Route::get('/explorar', function () {return view('pages.explorar');	});
    Route::get('/ejercicios', function () {return view('pages.ejercicios');	});
    Route::get('/respiracion', function () {return view('pages.respiracion');	});
    Route::get('/apoyo', function () {return view('pages.apoyo');   });
    Route::get('/profesionales', function () {return view('pages.profesionales');   });
    Route::get('/dormir', function () {return view('pages.dormir');   });
    Route::get('/pinocho', function () {return view('pages.pinocho');   });
    Route::get('/caperucita', function () {return view('pages.caperucita');   });
    Route::get('/cenicienta', function () {return view('pages.cenicienta');   });
    Route::get('/ansiedad', function () {return view('pages.ansiedad');   });
    Route::get('/tristeza', function () {return view('pages.tristeza');   });
    Route::get('/temor', function () {return view('pages.temor');   });
    
});

require __DIR__.'/auth.php';
