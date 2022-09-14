**Setup:**

Clone this repo
```
git clone git@github.com:AdjusterPro/moodle.git
```

Add the official Moodle repo as an upstream source
```
git remote add upstream git://git.moodle.org/moodle.git
```


When an update is released, follow these steps to merge the upstream changes into our localized version.

1. Fetch upstream changes
    ```
    git checkout MOODLE_311_STABLE
    git pull
    ```

2. Merge into AP_MOODLE_311_STABLE
    `````
    git checkout AP_MOODLE_311_STABLE 
    git merge MOODLE_311_STABLE
    `````

3. Commit and Push to origin
    ```
    git commit -m "Update to Moodle 3.11.x"
    git push
    ```

4. Deploying

    **Testing**
    ```
    Mysql1:
    $ mysqldump  --single-transaction --skip-lock-tables  moodle | mysql moodle_upgrade_test

    Moodle-Poc:
    $ cd /var/www/domains/moodle-upgrade-test
    $ sudo ./ap_unattended_upgrade.sh
    ```

    **Manual Production update**

    Note: production automatically checks for updates from Github every Wednesday at 3AM
    ```
    $ cd /var/www/domains/moodle-poc
    $ sudo ./ap_unattended_upgrade.sh
    ```
