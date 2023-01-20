<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    const DATA = [
        'administrator' => self::ADMIN_ITEMS,
        'supervisor' => self::SUPERVISOR_ITEMS,
        'user' => self::USER_ITEMS,
    ];

    const ADMIN_ITEMS = [
        [
            'id' => 1,
            'link' => 'http://localhost/pages/menu/1',
            'name' => 'Item 1'
        ],

        [
            'id' => 2,
            'link' => 'http://localhost/pages/menu/2',
            'name' => 'Item 2'
        ],

        [
            'id' => 3,
            'link' => 'http://localhost/pages/menu/3',
            'name' => 'Item 3'
        ],

        [
            'id' => 4,
            'link' => 'http://localhost/pages/menu/4',
            'name' => 'Item 4'
        ],
    ];

    const SUPERVISOR_ITEMS = [
        [
            'id' => 5,
            'link' => 'http://localhost/pages/menu/5',
            'name' => 'Item 5'
        ],

        [
            'id' => 6,
            'link' => 'http://localhost/pages/menu/6',
            'name' => 'Item 6'
        ],

        [
            'id' => 7,
            'link' => 'http://localhost/pages/menu/7',
            'name' => 'Item 7'
        ],
    ];

    const USER_ITEMS = [
        [
            'id' => 8,
            'link' => 'http://localhost/pages/menu/8',
            'name' => 'Item 8'
        ],

        [
            'id' => 9,
            'link' => 'http://localhost/pages/menu/9',
            'name' => 'Item 9'
        ],

        [
            'id' => 10,
            'link' => 'http://localhost/pages/menu/10',
            'name' => 'Item 10'
        ],

        [
            'id' => 11,
            'link' => 'http://localhost/pages/menu/11',
            'name' => 'Item 11'
        ],
    ];

    #[Route('/menu', name: 'app_menu')]
    public function index(): JsonResponse
    {
        return $this->json( self::DATA);
    }
}
