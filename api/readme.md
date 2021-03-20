
# Simple Curd with Php Api
 
What do you need?
1. Local Server( Xampp , Wampp etc) [ https://www.apachefriends.org/xampp-files/7.3.27/xampp-windows-x64-7.3.27-1-VC15-installer.exe]
2. Code Editor(notepad++, sublime text etc)
3. Postman [https://dl.pstmn.io/download/latest/win64]


Now,
create a file php file, name composer.json
and the paste this code -
{ 

"autoload":{
    "classmap":[],
    "psr-4":{
      "App\\":"App/"
    }
  }
  
  }
  
  
and now open cmd( command line ) on same directory like ( C:\xampp\htdocs\api> ) and write  "composer dump-autoload"  (C:\xampp\htdocs\api>composer dump-autoload).
after this command automaitic crate a vendor folder.
