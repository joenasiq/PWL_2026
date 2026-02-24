   <?php
   
   use Illuminate\Support\Facades\Route;
   use App\Http\Controllers\WelcomeController;
   use App\Http\Controllers\HomeController;
   use App\Http\Controllers\AboutController;
   use App\Http\Controllers\ArticleController;

   /*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register web routes for your application. These
   | routes are loaded by the RouteServiceProvider and all of them will
   | be assigned to the "web" middleware group. Make something great!
   |
   */
   use App\Http\Controllers\PhotoController;
   
   Route::resource('photos', PhotoController::class);

   Route::get('/', HomeController::class);
   Route::get('/about', AboutController::class);
   Route::get('/articles/{id}', ArticleController::class);

   Route::get('/greeting', function () {
      return view('hello', ['name' => 'Arjuna']);
   });
   
   Route::get('/greeting', function () {
      return view('blog.hello', ['name' => 'Andi']);
   });

   Route::get('/greeting', [WelcomeController::class, 'greeting']);
