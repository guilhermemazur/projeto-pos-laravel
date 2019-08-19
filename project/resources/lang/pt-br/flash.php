<?php

return [
    'common' => [
        'confirmation' => [
            'destroy' => 'Tem certeza que deseja apagar este registro?',
        ],
        'success' => [
            'create' => 'Cadastro realizado com sucesso.',
            'update' => 'Registro alterado com sucesso.',
            'destroy' => 'Registro removido com sucesso.',
        ],
        'error' => [
            'create' => 'Ocorreu um erro ao incluír este registro. Por favor, verifque os dados e tente novamente.',
            'destroy' => 'Ocorreu um erro ao remover este registro. Por favor, tente novamente.',
            'update' => 'Ocorreu um erro ao alterar este registro. Por favor, verifque os dados e tente novamente.',
        ],
    ],

    'user' => [
        'info' => [
            'verify' => 'Faça login para terminar a verificação.',
        ],
        'success' => [
            'register' => 'Usuário cadastrado com sucesso! Verifique seu e-mail e utilize o código recebido para validar sua conta.',
            'verify' => 'Cadastro realizado! Verifique seu email para confirmação.',
            'verified' => 'Seu email foi verificado com sucesso!',
            'destroy' => 'Usuário removido com sucesso.',
            'update' => 'Usuário alterado com sucesso!',
            'create' => 'Usuário criado com sucesso!',
            'reset_password' => 'Nova senha cadastrada com sucesso!',
        ],
        'error' => [
            'destroy' => 'Ocorreu um erro ao remover o usuário.',
            'destroy_self' => 'Não é possível apagar o usuário corrente.',
            'not_found' => 'Usuário não encontrado.',
        ],
    ],

    'car' => [
        'success' => [
            'destroy' => 'Carro removido com sucesso.',
            'update' => 'Carro alterado com sucesso!',
            'create' => 'Carro criado com sucesso!',
        ],
        'error' => [
            'destroy' => 'Ocorreu um erro ao remover o carro.',
            'destroy_self' => 'Não é possível apagar o carro corrente.',
            'not_found' => 'Carro não encontrado.',
        ],
    ],

    'verification' => [
        'success' => [
            'already_verified' => 'Sua conta já foi verificada!',
            'verified' => 'Conta verificada com sucesso!',
            'resend' => 'Código de verificação reenviado com sucesso!',
        ],
        'error' => [
            'email_cannot_be_identified' => 'Código de verificação expirado para o e-mail informado.',
            'incorrect_code' => 'Código de verificação incorreto.',
        ],
    ],
];
