# 5HD Starter WP theme

## First run
1. [Download this theme](theme-fivehdstarter/repository/master/archive.zip) as a ZIP (_don't clone!_)
1. Initialize as a new repo
1. Run `npm install` to set up local environment
1. Update [theme/style.css](theme/style.css) with theme info for WP

## Get started building
1. Rename `gitignore` to `.gitignore` (if it doesn't already exist)
1. Run `npm start` from terminal. That's it!

## Upload to WPEngine for testing
1. [Create a new user](https://wpengine.com/support/how-do-i-add-new-sftp-accounts/) at WPEngine to work with your new install
1. Create a new folder in `wp-content/themes/` on your WPEngine install for your new theme.
  - For this theme, we'd make the folder `wp-content/themes/fivehdstarter`
1. Copy everything from **inside** the [theme](theme/) folder to your new folder at WPEngine
  - Once you're done, you should see "404.php, archive.php, footer.php" in your new folder in `wp-content/themes/your-new-folder`.

## Ready for deploy
1. Create a SFTP user at WPEngine for deploys *only* (e.g. `fivehdstarter-gitlab`). The "path" for this user should be `/wp-content`.
1. Rename `gitlab-ci.yml.template` to `.gitlab-ci.yml` to 
1. Edit variables in [.gitlab-ci.yml.template](.gitlab-ci.yml.template) to match WPEngine set-up
1. Add ENV variables (user/pass) to GitLab project -- see `.gitlab-ci.yml.template` for variable names
1. Rename `.gitlab-ci.yml.template` => `.gitlab-ci.yml`
1. Push repo to trigger deploy
