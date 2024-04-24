apt-get update
apt-get install lftp -y
mkdir ~/.ssh && touch ~/.ssh/config
which ssh-agent || ( apt-get update -y && apt-get install openssh-client -y )
eval $(ssh-agent -s)
[[ -f /.dockerenv ]] && echo -e "Host *\n\tStrictHostKeyChecking no\n\n" > ~/.ssh/config
lftp -c "open -p 2222 --user $WPENGINE_LIVE_USER --pass $WPENGINE_LIVE_PASS sftp://$WPENGINE_HOST;
  ( mkdir -f themes-archive ) || echo 'theme archives dir exists' &&
  mirror -vvv -R theme/ themes/_$THEME_DIR &&
  ( mv themes/$THEME_DIR themes-archive/$THEME_DIR-job$CI_JOB_ID ) || echo 'new theme' &&
  mv themes/_$THEME_DIR themes/$THEME_DIR"
