export var=1
echo $var
sed "s/{secret_access_key}/$var/" config.yaml
