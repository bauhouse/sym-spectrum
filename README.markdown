<<<<<<< HEAD:README.markdown
# Spectrum Branch of the Symphony 2 Repository

This repository has been used to assemble the submodules necessary to build the [Spectrum Ensemble](http://github.com/bauhouse/sym-barebones/tree/master). It can be assembled with the following process:

### Install Symphony and Spectrum Workspace via Git

Clone my fork of the Symphony 2 repository
=======
# Spectrum Symphony CMS Ensemble

The Spectrum ensemble is a modified install package for Symphony 2.0.4. The main difference between this install and the official version is that this version has been rebuilt from a clean install with exactly the same structure as the default Spectrum theme.

- This ensemble is based on the BareBones Symphony CMS Ensemble
- CSS and images are included
- No entries have been created
- The order of the sections has been slightly modified

### Install

	git clone git://github.com/bauhouse/sym-spectrum.git

### Install from Spectrum Branch

This repository brings together two separate branches to simplify the install process. To install from these branches, the process looks something like this:
>>>>>>> d4036524678b61eaa7ad227db118ac9c5c307541:README.markdown

	git clone git://github.com/bauhouse/symphony-2.git

Rename the directory from `symphony-2` to `test`

	mv symphony-2 test

Change the current working directory to `test`

	cd test

Create a new branch called `spectrum`

	git checkout -b spectrum

<<<<<<< HEAD:README.markdown
Pull the changes from the GitHub repository for the spectrum branch
=======
Pull the changes from the GitHub repository for the barebones branch
>>>>>>> d4036524678b61eaa7ad227db118ac9c5c307541:README.markdown

	git pull origin spectrum

Initialize the submodules

	git submodule init

Update the submodules

	git submodule update
	
<<<<<<< HEAD:README.markdown
At this point, all the files required for a bare bones install are ready. The second branch that has been included as a submodule is the workspace, which is referring to a specific commit of the [spectrum branch](http://github.com/bauhouse/symphony-2/tree/spectrum) of my fork of the Symphony workspace repository. To clone this fork separately, use the following commands:
=======
At this point, all the files required for a bare bones install are ready. The second branch that has been included as a submodule is the workspace, which is referring to a specific commit of the `spectrum` branch of my fork of the Symphony workspace repository. To clone this fork separately, use the following commands:
>>>>>>> d4036524678b61eaa7ad227db118ac9c5c307541:README.markdown

	git clone git://github.com/bauhouse/workspace.git
	cd workspace
	git checkout -b spectrum
	git pull origin spectrum

<<<<<<< HEAD:README.markdown
## The Spectrum Ensemble

The [Spectrum Ensemble](http://github.com/bauhouse/sym-spectrum/tree/master) is a modified installer for Symphony 2.0.4. The main difference between this install and the official version is that this version has been rebuilt from a clean install with exactly the same structure as the default Spectrum theme.

## Install

The Spectrum Ensemble repository brings together the [Symphony 2.0.4](http://github.com/symphony/symphony-2/tree/master) core application, the required extensions and the [Spectrum workspace](http://github.com/bauhouse/workspace/tree/spectrum) to simplify the install process. This installer provides a single ZIP archive or a single Git command to provide all the files necessary for installation. Refer to the README file for the [Spectrum workspace](http://github.com/bauhouse/workspace/tree/spectrum) for install instructions using Git to bring all the different source repositories together.

### Install from Spectrum Ensemble ZIP Archive

Go to the [Downloads](http://github.com/bauhouse/workspace/downloads) page to download the ZIP file. This is the simplest, if you want to avoid using Git altogether.

### Install Spectrum Ensemble via Git

This repository has been created to make the installation as simple as possible. A single Git command will provide all that you need:

	git clone git://github.com/bauhouse/sym-spectrum.git

That should be all. Install Symphony as usual. (Find the instructions at the [official Symphony 2 repository](http://github.com/symphony/symphony-2).) For convenience, they have been included below:
=======
>>>>>>> d4036524678b61eaa7ad227db118ac9c5c307541:README.markdown

## Symphony 2 ##

- Version: 2.0.4
- Date: 9th July 2009
- Github Repository: <http://github.com/symphony/symphony-2/tree/master>


## Synopsis

Symphony is a `PHP` & `MySQL` based CMS that utilises `XML` and `XSLT` as its core 
technologies. This repository represents version 2.0.3 and is considered stable.

Visit the forum at <http://symphony-cms.com/forum/>


## Updating

### Via Git

1. Use the following command to get Extensions up to date:

	git submodule init
	git submodule update

2. Follow normal updating procedure below from step 4.

### Via the old fashioned way

Follow the instructions below if you are updating from Symphony version 2.0 (non Git)

1. Backup `/symphony/.htaccess`.

2. Upload `/symphony`, `index.php` & `update.php`, replacing what is already on your server.

3. Put the backed-up `.htaccess` file into the new `/symphony` folder.

4. Go to `http://yoursite.com/update.php` to complete the update process.

5. Celebrate by shaving your friend's head for charity!


## INSTALLING

### Via Git

1. Clone the git repository to the location you desire using:

		git clone git://github.com/symphony/symphony-2.git
		
	Should you wish to make contributions back to the project, fork the master tree rather than cloning, and issue pull requests via github.

	The following repositories are included as submodules:

	- [Markdown](http://github.com/pointybeard/markdown)
	- [Maintenance Mode](http://github.com/pointybeard/maintenance_mode)
	- [Select Box Link Field](http://github.com/pointybeard/selectbox_link_field)
	- [JIT Image Manipulation](http://github.com/pointybeard/jit_image_manipulation)
	- [Export Ensemble](http://github.com/pointybeard/export_ensemble)
	- [Debug DevKit](http://github.com/symphony/debugdevkit/tree/master)
	- [Profile DevKit](http://github.com/symphony/profiledevkit/tree/master)

3. Run the following commands to ensure the submodules are cloned:

		git submodule init
		git submodule update

4. _(Optional)_ If you would like the [default theme](http://github.com/symphony/workspace/tree) installed as well, 
you will need to use the following command from within the Symphony 2 folder you just created:

		git clone git://github.com/symphony/workspace.git
		
5. Follow normal installation procedure below from step 2.


### Via the old fashioned way

**Note: You can leave `/workspace` out if you do not want the default theme.**

1. This step assumes you downloaded a zip archive from the [Symphony website](http://symphony21.com). 
Upload the following files and directories to the root directory of your website:

	- index.php
	- install.php
	- /symphony
	- /workspace
	- /extensions

2. Point your web browser at <http://yourwebsite.com/install.php> and provide
details for establishing a database connection and about your server environment.

3. Jump with both arms up like you're in a car commercial!


## SECURITY

**Secure Production Sites: Change permissions and remove installer files.**

1. For a smooth install process, change permissions for the `root`, `symphony` and `workspace` directories.

		cd /your/site/root
		chmod 777 symphony .
		chmod -R 777 workspace

2. Once successfully installed, change permissions as per your server preferences:

		chmod 755 symphony .

3. Remove installer files (unless you're fine with revealing all your trade secrets):

		rm install.php install.sql workspace/install.sql update.php

4. Dance like it's 1999!