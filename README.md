# ContactForm-hCaptcha
Un pequeño proyecto hecho con PHP, En donde se desarrolla un formulario de contacto en donde mediante un hCaptcha se validara si la persona que ingresa los datos es o no un humano.

Cabe mencionar que para probar este trabajo deberas:
- Estar registrado en https://www.hcaptcha.com/
- Al tener una cuenta en hcaptcha podras utilizar las sus variables (secret, sitiekey, endpoint) que son necesarias.
- Ingresa tus datos de tu cuenta en el archivo .env.example y completa las variables de entorno.
- Reemplazar .env.example por .env
- Deberas ejecutar en tu consolar composer install para que se instalen las dependencia del proyecto (Solamente tiene el paquete vlucas/phpdotenv).
- Por ultimo deberas cambiar tu dominio local "localhost" por la ip "127.0.0.1" ya que te generara un error si lo dejas por defecto. 
