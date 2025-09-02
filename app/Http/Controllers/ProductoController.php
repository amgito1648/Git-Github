namespace App\Http\Controllers;

use App\Models\Producto; // Asegúrate de que el modelo Producto esté importado
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrarDetalles($id)
    {
        // Busca el producto por ID
        $producto = Producto::find($id);

        // Si el producto no se encuentra, redirige a la página principal
        if (!$producto) {
            return redirect()->route('landing')->with('error', 'Producto no encontrado');
        }

        // Devuelve la vista con el producto
        return view('detalles', compact('producto'));
    }
}
