<?php

namespace App\Controller;

use App\Repository\WordRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/home')]
class HomeController extends AbstractController
{


    public function __construct(private ManagerRegistry $doctrine)
    {
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/lernen', name: 'app_home_learn')]
    public function learn(WordRepository $wordRepository): Response
    {

        $words = $wordRepository->findAll();
        $index = array_rand($words);
        $word = $words[$index];
        $wordsPerLevel = $wordRepository->getWordsPerLevel();
        return $this->render('home/learn.html.twig', [
            'word' => $word,
            'wordsPerLevel' => $wordsPerLevel
        ]);


    }

    #[Route('/lernen/richtig/{id}', name: 'app_home_learn_correct')]
    public function increaseProgress(int $id, WordRepository $wordRepository): Response
    {
        $word = $wordRepository->find($id);
        if (!$word) {
            throw $this->createNotFoundException('kein wort für id: '.$id);
        }
        if($word->getProgress() < 5){
            $word->setProgress($word->getProgress() + 1);

        }
        $em = $this->doctrine->getManager();
        $em->persist($word);
        $em->flush();

        return $this->redirectToRoute('app_home_learn');
    }

    #[Route('/lernen/falsch/{id}', name: 'app_home_learn_false')]
    public function decreaseProgress(int $id, WordRepository $wordRepository): Response
    {

        $word = $wordRepository->find($id);
        if (!$word) {
            throw $this->createNotFoundException('kein wort für id: '.$id);
        }
        if ($word->getProgress() > 1){
            echo '<script>alert("falsch")</script>';
            $word->setProgress($word->getProgress() - 1);

        }
        $em = $this->doctrine->getManager();
        $em->persist($word);
        $em->flush();

        return $this->redirectToRoute('app_home_learn');
    }
}
