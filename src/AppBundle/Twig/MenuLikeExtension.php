<?php
namespace AppBundle\Twig;
use AppBundle\Services\CountNote;
class MenuLikeExtension extends \Twig_Extension
{
    /**
     * @var MenuLikeService
     */
    private $menuLikeService;
    /**
     * @param MenuLikeService $menuLikeService
     */
    public function __construct(CountNote $menuLikeService)
    {
        $this->menuLikeService = $menuLikeService;
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'get_total_menu_like',
                [$this, 'NbTotalNote']
            ),
            new \Twig_SimpleFunction(
                'get_avg_menu_like',
                [$this, 'MoyenneNote']
            )
        ];
    }
    public function NbTotalNote($id)
    {
        return $this->menuLikeService->getTotalMenuLike($id);
    }
    public function MoyenneNote($id)
    {
        return $this->menuLikeService->getMoyenneMenuLike($id);
    }
}
