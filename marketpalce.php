4. Marketplace
4.1. Controlador de Marketplace (src/Controller/MarketplaceController.php)
 
namespace App\Controller;

use App\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MarketplaceController extends AbstractController
{
    /**
     * @Route("/marketplace", name="marketplace")
     */
    public function index(ContentRepository $contentRepository)
    {
        $contents = $contentRepository->findAll();

        return $this->render('marketplace/index.html.twig', [
            'contents' => $contents,
        ]);
    }
}
5. Plantillas de Visualización
Aquí puedes crear las plantillas para mostrar los diferentes tipos de contenido, el marketplace, y el perfil del usuario en la carpeta correspondiente dentro de /templates.
