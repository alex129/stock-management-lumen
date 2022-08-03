<?php

namespace App\Exceptions;

use Exception;

class RepositoryException extends Exception
{
    public function render($request)
    {       
        return response()->json(["error" => true, "message" => $this->getMessage()]);       
    }
}