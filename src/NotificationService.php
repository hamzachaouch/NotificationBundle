<?php

namespace HamDev\NotifcationBundle;

use HamDev\NotifcationBundle\Entity\Notification;
use HamDev\NotifcationBundle\Repository\NotificationRepository;

class NotificationService {


    public function   __construct(NotificationRepository $notificationRepository){
        $this->notificationRepository=$notificationRepository;

    }

    public function getNotification( $idUser)
    {
        return ["listNotification"=>$this->notificationRepository->findBy(['id_user'=>$idUser]),
            "countNotification"=>count($this->notificationRepository->findBy(['id_user'=>$idUser]))] ;
    }

    //function that inserts notification into database
    public function pushNotifications(array $users,string $message): bool
    {
        $em=$this->notificationRepository->getEm();
        $users= array_unique($users);
        //$users is an array of ids
        if(!empty($users)){
            foreach ($users as $user){
            $notification = new Notification();
            $now = date_create()->format('Y-m-d H:i:s');
            $notification->setDate($now);
            $notification->setMessage($message);
            $notification->setIdUser($user);
            $em->persist($notification);
            }
            $em->flush();
            return true;
        }

       return false;

    }

    //function that deletes single notification
    public function deleteNotification($idNotification):bool
    {
        $em=$this->notificationRepository->getEm();
        $notification = $this->notificationRepository->findBy(['id'=>$idNotification]);

        if(empty($notification)){
            throw new \Exception("Hamdev_Notification_Not_Found");
        }

        $em->remove($notification[0]);
        $em->flush();
       return true;
    }

}
