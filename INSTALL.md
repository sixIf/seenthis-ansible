### 1. Importante

El computador donde instalaremos ansible debe tener un accesso ssh disponible con los computadores del servidor y este accesso debe permetir el uso de sudo en los computadores del servidor.
Por consiguiente, las maquinas del servidor deben tener ssh instalado.



### 2. Instalación de ansible

```
sudo apt-add-repository -y ppa:ansible/ansible
sudo apt-get update
sudo apt-get install -y ansible
```

### 3. Configurar Ansible

Tenemos que escreber en el archivo hosts localisado en /etc/ansible/hosts la direccion del servidor dondé queremos instalar seenthis o los dirreciones de los computadores.

[Haga clic para saber como](http://docs.ansible.com/intro_inventory.html)

### 4. Ejecutar el playbook

```ansible-playbook -i /etc/ansible/hosts /home/stoko/Documents/playbook.yml -k --ask-become-pass```

Deberia entrar la contrasena de la conexion ssh y despues la contrasena de la cuenta sudo.

### 5. Configurar seenthis

Vamos a activar la conexion SQL del sitio SPIP : [http://localhost/seenthis/ecrire/ ] (http://localhost/seenthis/ecrire/ )

Ahora, tiene que seguir las instrucciones en el sitio.
Podemos elegir MySql o SqLite por la base de datos


# Con MySQL, poner "root" para el identificador de conexión y dejar sin contrasena
 


Criar 2 autores y nombrar "seenthis" el autor numero 3.

[http://localhost/seenthis/ecrire/?exec=config_fonctions] (http://localhost/seenthis/ecrire/?exec=config_fonctions) => elegir GD2 para el tippo URLs : seenthis
[http://localhost/seenthis/ecrire/?exec=config_contenu#configurer-redacteurs] (http://localhost/seenthis/ecrire/?exec=config_contenu#configurer-redacteurs) => Elegir "
[http://localhost/seenthis/ecrire/?exec=configurer_gravatar] (http://localhost/seenthis/ecrire/?exec=configurer_gravatar)


### 6. Activar fulltext

En la base de datos, ejecutar :

```
ALTER table spip_me_recherche ENGINE=MyISAM;
ALTER TABLE spip_me_recherche ADD FULLTEXT titre (`titre`);
ALTER TABLE spip_me_recherche ADD FULLTEXT texte (`texte`);

ALTER table spip_syndic ENGINE=MyISAM;
ALTER TABLE spip_syndic ADD FULLTEXT tout (`url_site`,`titre`,`texte`);
```






