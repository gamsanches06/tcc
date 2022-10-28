<?php

namespace App\Controller;

use App\Entity\DataSymfony;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DataSymfonyController extends AbstractFOSRestController
{
    /**
     * A controller action function, defined with the
     * `http` method `GET` to retrieve the server
     * health status.
     *
     * @Get("/", name="get_home")
     */
    public function getHome(ManagerRegistry $doctrine)
    {
        $starttime = microtime(true);
        $repo = $doctrine->getRepository(DataSymfony::class);
        $data = $repo->findAll();
        $endtime = microtime(true);
        $timediff = $endtime - $starttime;

        return new JsonResponse([
            'time' => $starttime,
            'timepost' => $endtime,
            'elapsedTime' => sprintf('%0.2f', $timediff),
            'code' => 'ok'
        ]);
    }

    /**
     * @Post("/inserir", name="insert_data")
     */
    public function postData(ManagerRegistry $doctrine, Request $request)
    {
        set_time_limit(50000000000000);
        $starttime = microtime(true);

        $limit = $request->get('limit');

        $entityManager = $doctrine->getManager();
        $dataJson = file_get_contents(__DIR__ . "/../../data.json");

        $dataArray = json_decode($dataJson, true);
        if (empty($limit)){
            $limit = count($dataArray);
        }
        for ($i = 0; $i < $limit; $i++) {
            $dataSymfony = new DataSymfony();
            foreach ($dataArray[$i] as $key => $data) {
                switch ($key) {
                    case "isActive":
                        if ($data === "") {
                            $dataSymfony->setIsActive(false);
                        } else {
                            $dataSymfony->setIsActive(true);
                        }
                        break;
                    case "age":
                        $dataSymfony->setAge($data);
                        break;
                    case "balance":
                        $dataSymfony->setBalance($data);
                        break;
                    case "name":
                        $dataSymfony->setName($data);
                        break;
                    case "gender":
                        $dataSymfony->setGender($data);
                        break;
                    case "company":
                        $dataSymfony->setCompany($data);
                        break;
                    case "email":
                        $dataSymfony->setEmail($data);
                        break;
                    case "phone":
                        $dataSymfony->setPhone($data);
                        break;
                    case "address":
                        $dataSymfony->setAddress($data);
                        break;
                }
            }
            $entityManager->persist($dataSymfony);
            $entityManager->flush();
        }
        $endtime = microtime(true);

        $timediff = $endtime - $starttime;

        return new JsonResponse([
            'time' => $starttime,
            'timepost' => $endtime,
            'elapsedTime' => sprintf('%0.2f', $timediff),
            'numberOfInsertedItems' => $limit,
            'code' => 'ok'
        ]);

    }
}