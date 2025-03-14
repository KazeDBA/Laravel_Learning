```markdown
🏋️ Calculadora de IMC (Índice de Massa Corporal)

Uma aplicação web desenvolvida em Laravel para cálculo de IMC, com classificação automática seguindo os padrões da OMS. 

✨ Funcionalidades

- Cálculo Automático do IMC: Insira peso e altura para obter seu IMC instantaneamente.
- Classificação OMS: Resultado classificado em categorias (Abaixo do peso, Obesidade grau 3, etc.).
- Tabela de Referência: Visualização interativa da tabela de classificação da OMS.
- Responsivo: Funciona perfeitamente em dispositivos móveis e desktop.
- Impressão: Botão para imprimir o resultado.

🛠️ Tecnologias

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white)](https://getbootstrap.com)

- Backend: Laravel 10
- Frontend: Blade, Bootstrap 5, Font Awesome
- Validação: Regex para formatos numéricos brasileiros (ex: `1,75m`)

⚙️ Pré-requisitos

- PHP ≥ 8.1
- Composer
- Node.js (opcional para assets)
  
  ```
🚀 Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/calculadora-imc.git
   cd calculadora-imc
   ```

2. Instale as dependências:
   ```bash
   composer install
   npm install && npm run build Opcional: se usar assets personalizados
   ```

3. Configure o ambiente:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Inicie o servidor:
   ```bash
   php artisan serve
   Acesse: http://localhost:8000
   ```


📝 Como Usar

1. Preencha o formulário:
   - Nome completo
   - Data de nascimento
   - Peso (ex: `82,5` kg)
   - Altura (ex: `1,75` m)

2. Clique em "Calcular IMC":  
   O sistema validará os dados e redirecionará para a página de resultados.

3. Visualize o resultado:  
   - IMC calculado
   - Classificação
   - Tabela de referência com destaque para sua categoria

🎨 Estrutura do Projeto

```
.
├── app/
│   └── Http/
│       └── Controllers/
│           ├── PageController.php     Controla as views
│           └── IMCController.php      Lógica do cálculo
├── resources/
│   └── views/
│       ├── index.blade.php        Página inicial (formulário)
│       └── information.blade.php  Página de resultado
└── routes/
    └── web.php             Definição de rotas
```

🤝 Contribuindo

1. Faça um fork do projeto
2. Crie uma branch: `git checkout -b feature/nova-feature`
3. Commit suas mudanças: `git commit -m 'Adicione uma feature incrível'`
4. Push: `git push origin feature/nova-feature`
5. Abra um Pull Request

📄 Licença

MIT License - Consulte o arquivo [LICENSE](LICENSE) para detalhes.

---

Feito com ❤️ por [Felipe José Sens] - Dúvidas? Abra uma [issue](https://github.com/seu-usuario/calculadora-imc/issues)!
