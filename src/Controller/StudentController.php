<?PHP
namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class StudentController extends AbstractController{
    /**
     * @Route("/", name="index")
     */
    public function index() : Response  {
        return new Response("Bonjour mes étudiants");
    }
}


?>