#!/bin/sh
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/sh ./git_push.sh wing328 swagger-petstore-perl "minor update"


release_note=$1
git_user_id=ventureleap
git_repo_id=leap-one-product-sdk
git_remote_url=$2

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$release_note"

# Sets the new remote
git_remote=`git remote`
if [ "$git_remote" = "" ]; then # git remote not defined

    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git credential in your environment."
        git remote add origin https://github.com/${git_user_id}/${git_repo_id}.git
    else
        git remote add origin git@github.com:${git_user_id}/${git_repo_id}.git
    fi

fi

if [ "git_remote_url" != "" ]; then
    git remote set-url ${git_remote_url}.git
fi

git pull origin master

# Pushes (Forces) the changes in the local repository up to the remote repository
echo "Git pushing to https://github.com/${git_user_id}/${git_repo_id}.git"
git push origin master 2>&1 | grep -v 'To https'

