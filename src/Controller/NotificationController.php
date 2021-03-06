<?php

namespace HamDev\NotifcationBundle\Controller;

use HamDev\NotifcationBundle\NotificationService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class NotificationController extends AbstractController{

    private $notificationService;

    /**
     * NotificationController constructor.
     * @param $notificationService
     */
    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }


    public function list(NotificationService $notificationService): Response
    {

        dd($notificationService->getNotification(11));
        return $this->render('main/index.html.twig');
    }



}
