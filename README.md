
# 🌟 Sequência de Fibonacci em PHP 🌈

Este projeto consiste em uma página web simples que permite gerar os primeiros números da sequência de Fibonacci com base em um número fornecido pelo usuário. A sequência de Fibonacci é uma série de números em que cada número subsequente é a soma dos dois números anteriores.

## ✨ Funcionalidades

- O usuário pode inserir um número inteiro positivo através de um formulário.
- Ao enviar o formulário, a página exibe os primeiros `n` números na sequência de Fibonacci, onde `n` é o número fornecido pelo usuário.
- A página valida se o número inserido é um inteiro positivo antes de gerar a sequência.
- A sequência gerada é exibida em uma lista na página web.

## 🛠️ Tecnologias Utilizadas

- PHP: para processamento do formulário e geração da sequência de Fibonacci.
- HTML/CSS: para a estrutura e estilo da página web.

## 📁 Estrutura do Projeto

O projeto contém os seguintes arquivos:

- `fibonacci.php`: o arquivo principal que contém o código PHP e HTML para a geração da sequência de Fibonacci e a exibição na página.
- `style.css`: arquivo CSS para estilizar a página web.

## ⚙️ Pré-requisitos

- Um servidor web local (como Apache) ou um ambiente de desenvolvimento PHP (como XAMPP) para executar o código.

## 🚀 Como Usar

1. Clone ou faça o download deste repositório para o seu ambiente de desenvolvimento local.
2. Certifique-se de que o seu servidor web ou ambiente PHP esteja configurado corretamente.
3. Abra o arquivo `fibonacci.php` em seu navegador web.
4. Insira um número inteiro positivo no campo do formulário e clique no botão "Gerar Sequência".
5. Os primeiros números da sequência de Fibonacci com base no número fornecido serão exibidos na página.

## 💻 Exemplo de Código

Aqui está um trecho do código PHP utilizado para gerar a sequência de Fibonacci:

```php
// Função para gerar os primeiros n números na sequência de Fibonacci
function fibonacci_sequence($n) {
    $fib_sequence = []; // Array para armazenar a sequência de Fibonacci
    $a = 0; // Primeiro número da sequência
    $b = 1; // Segundo número da sequência
    
    for ($i = 0; $i < $n; $i++) {
        $fib_sequence[] = $a; // Adiciona o número atual à sequência
        $next = $a + $b; // Calcula o próximo número na sequência
        $a = $b; // Atualiza o primeiro número para o próximo da sequência
        $b = $next; // Atualiza o segundo número para o próximo da sequência
    }
    
    return $fib_sequence; // Retorna a sequência de Fibonacci gerada
}
```

## 🤝 Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para propor melhorias ou novas funcionalidades através de pull requests.

## ✍️ Autor

Este projeto foi desenvolvido por **Ruan Pablo**.

