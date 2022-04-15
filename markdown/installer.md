The purpose of the installer is to install a version of Soviet-Linux on the user's PC. The installer's planned functionality is as follows:

1. Set root password
1. Create users
1. Partition the drive using (fdisk/cfdisk)
1. Create a file system (ext4, btrfs, xfs, etc.)
1. Specify mounting points for directories (/, /home, etc.)
1. Decompress and copy files from iso image
1. Install Grub (grub-install)
1. Recompile the kernel following user configuration

Ideas for possible other features:

1. Connect to a network
1. update system on install
