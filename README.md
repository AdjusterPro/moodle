1. Fetch upstream changes
```
git checkout MOODLE_311_STABLE
git pull
```

2. Merge into AP_MOODLE_311_STABLE
```
git checkout AP_MOODLE_311_STABLE 
git merge MOODLE_311_STABLE
```

3. Push to origin
```
git push
```

4. On Moodle server
```
$ cd /var/www/domains/moodle
$ sudo -u apache /usr/bin/php admin/cli/maintenance.php --enable
$ git pull
$ sudo -u apache /usr/bin/php admin/cli/upgrade.php --non-interactive
$ sudo -u apache /usr/bin/php admin/cli/maintenance.php --disable
```