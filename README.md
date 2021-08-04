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
git pull
```