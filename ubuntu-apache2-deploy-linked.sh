#!/bin/bash

whoiam="$(whoami)";


dest="/var/www/linkedhtml";

# https://stackoverflow.com/questions/59895/how-do-i-get-the-directory-where-a-bash-script-is-located-from-within-the-script
SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd );

#rm -rf ${dest}/*;
#shopt -s dotglob;
#cp -r * "${dest}/";


sudo -s -- <<EOF
	rm -f "$dest";
	ln -s "$SCRIPT_DIR" "$dest";
	#chown -R "${whoiam}:${whoiam}" "$dest";
	chown -R -L "${whoiam}:www-data" "$dest";
EOF



