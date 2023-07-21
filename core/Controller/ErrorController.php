<?php

namespace core\Controller;

use core\View\JsonView;
use core\View\View;

class ErrorController {
    public function notFoundAction(): View {
        return new JsonView([
            'success' => false,
            'error'   => 'Page-not-found',
            'message' => 'Страница не найдена. Сервер не может найти совпадения с полученным URI'
        ],
            404
        );
    }

    public function badRequestAction(): View {
        return new JsonView([
            'success' => false,
            'error'   => 'Bad-Request',
            'message' => 'Страница не найдена. Сервер не может обработать полученный URI'
        ],
            400
        );
    }
}
