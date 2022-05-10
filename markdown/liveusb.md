# Live USB Creation instructions

This page will go into details on the creation of a Live USB to use or install
Soviet Linux. It is recommended to read this page carefully before attempting
to create a Live USB since the creation process is different than the usual,
write the ISO on the USB with `dd`. It also includes a few notes that might be
helpful to debug and find problems in your Live USB.

## What you will need

- USB Drive (4GB recommended)
- The Soviet Linux ISO which can be downloaded from our website
- A working Linux system

> **NOTE:** It is possible to create the Live USB on Windows but it is untested

### Note on the USB drive

Due to the limitations of the tool we have been using, the Live USB will not
boot on a drive with a gpt label. We suggest you set the label of your drive to
dos and make sure the partition created is set to be bootable. You can attempt
to make a Live USB on a gpt disk but you wont receive any support.

## Formatting the USB drive

First step in the creation process is formatting your USB drive and create the
correct file system. Currently, the only option is ext4 due to the precompiled
kernel only including this file system.

> **WARNING:** Backup all important data from your USB drive since the next
> command will erase all content from your drive.

To format your derive and create the correct file system run this command:

`mkfs.ext4 <*your device*>`

## Mounting the ISO and USB

Unlike other distributions using the `dd` command to write the ISO will not
work. You will need to manually copy the files from the ISO to your drive.
To do so you first need to mount the ISO with this command:

`# mount soviet-linux.x86_64.iso /mnt/iso -o loop`

Then `cd` into the `/mnt/iso` directory.

> **NOTE:** You can choose any directory name under `/mnt` but remember to
> create one if it doesn't exist or else `mount` will return an error

Also mount your USB drive:

`# mount <*your device*> /mnt/usb`

> **NOTE:** You will need superuser permission to execute the `mount` command

## Copying the ISO

The next step is to copy over all files from the ISO to the drive. From the
`/mnt/iso` directory, execute this command:

`cp -r * /mnt/usb`

## READ THE README IN THE DRIVE DIRECTORY

This step is **VERY** important! Failure to read and follow the steps in the
`readme.txt` file will result in an error when trying to boot from the Live USB
so do that!

## CONCLUSION

Once you have completed all steps in this guide and in the `readme.txt` you are
done. You now can reboot your system and boot into your newly created Live USB.

> **NOTE:** You will get a few errors on boot. Don't be alarmed, they can be
> safely ignored.

If you need help with the Live USB please join our Discord and ask for
assistance there and mention ComradeKrasMazov#5277 for good measure.

Enjoy Soviet Linux, comrade!
