<?php
namespace App\Http\Middleware;

use App\Models\Product;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Search
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('q')) {
            $term = $request->input('q');

            $results = Product::search($term)->get();

            // Retournez directement la vue avec les résultats
            return redirect()->to('search')->with(['results' => $results]);
        }

        // Continuez la chaîne des middlewares si la condition n'est pas satisfaite
        return $next($request);
    }
}
