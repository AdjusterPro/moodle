#!/bin/bash

# Set the working directory
cd "$(dirname "$0")"

# Fetch updates
git remote update


if git status | grep 'Your branch is behind'; then
	sudo -u www-data /usr/bin/php admin/cli/maintenance.php --enable
	git pull
	sudo -u www-data /usr/bin/php admin/cli/upgrade.php --non-interactive
	sudo -u www-data /usr/bin/php admin/cli/maintenance.php --disable
fi
