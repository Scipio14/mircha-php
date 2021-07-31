/* Listado de Operaciones (queries) CRUD  de mexflix*/

/*movieseries*/
  /*Crear movieseries*/
    INSERT INTO movieseries SET imdb_id='tt3749900',title='Gotam',plot='',author='',actors='',country='',premiere='2014',trailer='',poster='',rating=8.0,gendre='Crime,Drama,Thriller',category='Series',status=3 ;

  /*Actualizar movieseries*/
    UPDATE movieseries SET title='Gotham',plot='In crime ridden Gotham City, Thomas an Martha Wayne are murdered before young Bruce Wayne  eyes',gendre='Crime,Drama,Thriller',author='Bruno Heller',actors='Zabryna Guevara,Ben McKenzie,Donal Logue,David Mazouz',country='USA',premiere='2014',trailer='',poster='https://m.media-amazon.com/images/M/MV5BMTU5NjQ2MTU4NV5BMl5BanBnXkFtZTgwOTYyNTAwNzM@._V1_SX300.jpg',rating=8.0,category='Serie',status=3 WHERE imdb_id='tt3749900';

  /*Eliminar movieseries*/
    DELETE FROM movieseries WHERE imdb_id='tt3749900';

  /*Buscar Todas la movieseries*/
   SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,ms.trailer,ms.poster,ms.rating,ms.gendre,ms.category,s.status
   FROM movieseries AS ms 
   INNER JOIN status as s 
   ON ms.status=s.status_id;

  /*Buscar una movieseries por títulos, personas (actores,autores) y géneros.*/
    SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,ms.trailer,ms.poster,ms.rating,ms.gendre,ms.category,s.status
   FROM movieseries AS ms 
   INNER JOIN status as s 
   ON ms.status=s.status_id
   WHERE MATCH(ms.title,ms.author,ms.actors,ms.gendre) 
   AGAINST('drama' IN BOOLEAN MODE);

  /*Buscar una movieseries por categoría*/
   SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,ms.trailer,ms.poster,ms.rating,ms.gendre,ms.category,s.status
   FROM movieseries AS ms 
   INNER JOIN status as s 
   ON ms.status=s.status_id
   WHERE ms.category='Movie';

 /* Buscar una movieseries por status*/
    SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,ms.trailer,ms.poster,ms.rating,ms.gendre,ms.category,s.status
   FROM movieseries AS ms 
   INNER JOIN status as s 
   ON ms.status=s.status_id
   WHERE ms.status=1;

/*status*/
  /*Crear status*/
    INSERT INTO status SET status_id =0,status='Otro status';

  /*Actualizar status*/
   UPDATE status SET status='Other status' WHERE status_id=6;

  /*Eliminar status*/
    DELETE FROM status WHERE status_id=6;
  /*Buscar Todos los status*/
    SELECT * FROM status;

 /* Buscar un status por status_id*/
   SELECT * FROM status WHERE status_id=3;
  
/*users*/
  /*Crear users*/
    INSERT INTO users SET user='@usuario',email='usuario@midominio.com',name='Soy un usuario',birthday='1988-10-09',pass=MD5('un_password'),role='Admin'; 

  /*Actualizar users*/
    /*Datos generales*/
      UPDATE users SET name = 'Pepito Grillo',birthday='1984-10-09',role='User'
      WHERE user = '@usuario' AND email='usuario@midominio.com';

    /*Password*/
      UPDATE users SET pass = MD5('mecanso_ganso')
      WHERE user = '@usuario' AND email='usuario@midominio.com';

 /* Eliminar users*/
    DELETE from users WHERE user='@usuario' AND email ='usuario@midominio.com';

/*Buscar Todos los users*/
  SELECT * FROM users;

/*Buscar un user por:*/
    /*user*/
    SELECT * FROM users WHERE user='@usuario';
    /*email*/
    SELECT * FROM users WHERE email='usuario@midominio.com';
    /*role*/
    SELECT * FROM users WHERE role='User';

