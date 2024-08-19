Gestión de Perfiles de Usuario
2.1. Controlador de Perfil (src/Controller/ProfileController.php)
 
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function showProfile(): Response
    {
        return $this->render('profile/show.html.twig');
    }

    /**
     * @Route("/profile/edit", name="edit_profile")
     */
    public function editProfile(Request $request): Response
    {
        // Lógica para editar el perfil del usuario
    }