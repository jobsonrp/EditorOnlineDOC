# EditorOnlineDOC

Link do projeto online: [MyDOCs](http://eodoc.sistemasdeti.pe.hu/)

## Acesso aos Documentos e Funcionalidades

Na primeira tela pode-se verificar as funcionalidades do projeto, onde nesta versão inicial é necessário digitar o nome completo dos arquivos, incluindo as extensões, para executar corretamente a ação escolhida pelo usuário.<br/>
<img src="images/Documentos.png" width="700"/>


## Edição dos Documentos

Ao chamar as funcionalidades da primeira tela, a tela de edição abaixo é mostrada, onde pode-se verificar as ferramentas originais do Editor (TinyEditor) e as outras funções adicionadas.<br/>

<img src="images/Editor.png" width="700"/>

As funções adicionadas foram:<br/>
* Salvar 
* Importar/Upload
* Download<br/>

Para que os documentos pudessem ser criados, visualizados, editados e salvos, foi decidido criar um banco de dados. O banco criado foi simples, e o arquivo _SQL Dump_ pode ser verificado acessadno esse link: [mywebdoc.sql](https://github.com/jobsonrp/EditorOnlineDOC/blob/master/sql/mywebdoc.sql). Neste banco foi criada apenas uma tabela com 3 campos: `id`, `nome` e `conteudo`. Então o `id` é um número autoincrementado, o `nome` é o nome do arquivo, e `conteudo` é o corpo do texto, onde as figuras são armazenas no formato de texto (html) juntamente com o texto do documento.

Obs.:
A implementação do Upload, nesta versão inicial, está limitada pois o sistema operacional (SO) impede, por segurança, que o endereço absoluto do arquivo selecionado seja capturado. Então o endereço foi forçado, no próprio código, para uma pasta específica. Nos testes locais bastou escolher um pasta e colocar no código. Já para o sistema online, a mesma pasta do teste local foi transferida para o site de hospedagem, e então quando se acessava o arquivo na pasta local, um arquivo com o mesmo nome era importado para o EditorOnline. Para efeito de testes funcionou normalmente.

## Links Usados

TinyEditor: https://github.com/jessegreathouse/TinyEditor

W3schools: https://www.w3schools.com/

Getbootstrap.com: https://getbootstrap.com/

Stackoverflow: https://stackoverflow.com/

Tiny: www.tiny.cloud/demo/full

