<?php
/**
 * @author Myshel Neiro <myshel@breakfreesl.com>
 * @copyright 2020 BreakFree
 */

namespace App\Dialog;

class DialogModel
{
    protected $avatar;
    // protected $channel;
    protected $message;

    protected $page;

    public function __construct(string $avatar, int $page) {
        $this->avatar = $avatar;
        $this->page = $page;
    }

    public function createView()
    {
        return [
            'avatar' => $this->avatar,
            'buttons' => $this->getButtons(),
            'message' => "Hello World!",
        ];
    }

    public function getButtons(): array {
        return [
            " ", "<<Done>>", " "
        ];
    }
}
