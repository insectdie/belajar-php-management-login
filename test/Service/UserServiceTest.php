<?php 

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Service;

use PHPUnit\Framework\TestCase;
use ProgrammerZamanNow\Belajar\PHP\MVC\Config\Database;
use ProgrammerZamanNow\Belajar\PHP\MVC\Domain\User;
use ProgrammerZamanNow\Belajar\PHP\MVC\Model\UserRegisterRequest;
use ProgrammerZamanNow\Belajar\PHP\MVC\Repository\UserRepository;

class UserServiceTest extends TestCase
{
    private UserService $userService;
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $connection = Database::getConnection();
        $this->userRepository = new UserRepository($connection);
        $this->userService = new UserService($this->userRepository);

        $this->userRepository->deleteAll();
    }

    // public function testRegisterSuccess()
    // { 
    //     $request = new UserRegisterRequest();
    //     $request->id = "eko";
    //     $request->name = "Eko";
    //     $request->password = "rahasia";

    //     $response = $this->userService->register($request);

    //     self::assertEquals($request->id, $response->user->id);
    //     self::assertEquals($request->name, $response->user->name);

    //     self::assertTrue(password_verify($request->password, $response->user->password));
    // }

}