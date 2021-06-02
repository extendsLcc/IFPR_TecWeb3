

## Definição de Estrutura de pastas das views

```
/layouts
 -> Modelos de arquivos de layout para serem extendidos
/components
 -> Deve ser um componente reutilizavel genérico. Não deve possuir caracteristicas próprias, as caracteristicas devem ser definidas pelos parametros passados para o componente
    EX: Input, inputSelect, TextArea, breadcrumb, modal 
/pages
  -> Todas as paginas devem possuir um diretório com seu nome e o arquivo principal de nome index.blade.php
  | Todos os diretórios da raiz, exceto /layouts/* e /packages, podem se repetir dentro do diretório de uma pagina. Inclusive /pages caso o dominio possua mais de uma view principal. Ex: checkout/identificação, checkout/endereço, checkout/pagamento
  /js
    -> Qualquer arquivo js adicional além do index.js, que não pertencer a um component ou section da page deve ir nesse subdiretório.
  /css
    -> Mesma regra do javascript acima
  /img
    -> Mesma regra do javascript
/sections
 -> Seções de código reutilizavel por várias paginas
    EX: footer, header side-menu, content 
/packages
 -> pacotes de importação de arquivos de scripts juntos de arquivos css de uma mesma biblioteca. Também pode servir de importação para pacotes de macros

```


### golden rules
```

1 - View code should be at
/{view-name}/index.blade.php
2 - If the view could be breaked down in non-reusable components they should be at
/{view-name}/sections/{section-name}/index.blade.php
3 - If part of the view could be breaked down in reusable components by this view only, they should be at
/{view-name}/components/{component-name}/index.blade.php
4 - If the view needs a javascript file, it should be at
/{view-name}/index.js
5 - If a section of the view needs a js file, it should be at
/{view-name}/sections/{section-name}/index.js
6 - If a component of the view needs a js file, it should be at
/{view-name}/components/{component-name}/index.js
7 - If a view needs aditional js files that do not belong either to a section or a component, those aditional js files should be at
/{view-name}/js/{descritive-file-name}.js
8 - same as 4 but for css
/{view-name}/index.css
9 - same as 5 but for css
/{view-name}/sections/{section-name}/index.css
10 - same as 6 but for css
/{view-name}/components/{component-name}/index.css
11 - same as 7 but for css
/{view-name}/css/{descritive-file-name}.css


EX:
/view/index.blade
/view/index.js
/view/index.css
/view/components/index.blade
/view/components/index.js
/view/components/index.css
/view/sections/index.blade
/view/sections/index.js
/view/sections/index.css

```
