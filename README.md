Steps to reproduce:

1. Run `composer install`
2. Run `symfony serve`
3. Go to http://127.0.0.1:8000/
4. Open Browser debugger
5. Input some text in the name input (e.g. test)
6. Click away from the input
7. You should see the DOMException in the console

