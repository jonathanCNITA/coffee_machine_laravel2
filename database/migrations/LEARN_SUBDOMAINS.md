# Sudomains

www.example.com
**com** : TLD Top Level Domain       
**example** : SLD Second Level Domain      
**www** : Subdomain     

**DNS** : Domain Name System      


1. Get a server with the ip 258.458.45.789
2. Install appache || gninx (wamp) ...
3. Buy a domain name (ex : gandi)
4. On gandi go to the DNS 
5. add 'A' with your subdomain test.example.com
6. On appache configur etc>appache2> defaultFile



Add a subdomain on gandi

```
ssh root@123.321.12.123
```


```bash
cd etc/apache2/sites-available/
```

Configure the new appache hostewHost
```bash
touch newHost.conf
```

add this lines:
```nano
<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html/machine_john/coffee_machine_php/
        DirectoryIndex machineCafe.php
        ServerName john.gmt-grenoble.club


        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet


```

Then save the file <kbd>ctrl</kbd><kbd>x</kbd> + <kbd>y</kbd> + <kbd>enter</kbd>     

Enable the new conf file: (a2 -> apache2) (en -> enable)
```
a2ensite newHost
```

And reload apache2
```
systemctl reload apache2

```

And now you can go to your subdomain : `mysubdomain.example.com`