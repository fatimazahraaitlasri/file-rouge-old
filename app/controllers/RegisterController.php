<?php

class RegisterController
{


    public function __construct()
    {
       
    }
    public function index()
    {

        if (isPostRequest()) {
            $reference = generateRandomString();
            $data = ["reference" => $reference, ...$_POST];

            $isCreated = $this->patientModel->create($data);
            if ($isCreated !== false) {
                return view("register", ["ref" => $reference]);
            }
        } else {
            return view("register");
        }

        view("register");
    }
}

        // ??????????????????????????????????????????????????????????????????????????
