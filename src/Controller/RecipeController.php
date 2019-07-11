<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recipe", name="recipe_list")
     * @param RecetteRepository $recetteRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(RecetteRepository $recetteRepository)
    {
        return $this->render('recipe/index.html.twig', [
            'recipes' => $recetteRepository->findAll(),
        ]);
    }
}
