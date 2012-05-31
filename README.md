The Ananas Build Toolkit
========================

## Bootstrap
```bash
git submodule add git@github.com:contructions-incongrues/ananas-build-toolkit.git vendor/ananas-build-toolkit
cd vendor/ananas-build-toolkit
git submodule update --init --recursive
cd -
ant -f vendor/ananas-build-toolkit/ant/toolkit.xml -Dbasedir=. -Dprofile=`whoami` init
```
