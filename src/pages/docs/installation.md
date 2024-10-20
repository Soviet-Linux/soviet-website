---
layout: ../../layouts/Docs.astro
---
# Installation Instructions

**[Soviet-Linux](https://github.com/Soviet-Linux) is not suitable for daily use. However, you can test it by following the instructions below.**

## Downloading the image
Firstly download a testing iso from #testing-releases on our discord server

## 1. Installing it on baremetal

### Prerequisites

1. A USB drive
1. A X86_64 computer

### Prepare Installation Media
The `dd` command can be used to copy a live image to a storage device. Using `dd`, write the live image to the device:
>Warning: this will destroy any data currently on the referenced device. Exercise caution.
```bash
$ dd bs=4M if=/path/to/sovietlinux-<DATE>-installation.img of=/dev/sdX
```
`dd` won't print anything until it's completed (or if it failed), so, depending on the device, this can take a few minutes or longer. You can enable printing by adding `status=progress` to the command.

Finally, ensure all data is flushed before disconnecting the device:
```bash
$ sync
```
### Booting up from the USB
Boot your machine from the install media you created.
Once the live image has booted, log in as `root` with password `sovietlinux` and run:
```bash
$ /etc/soviet-install.sh /dev/sdX # Target drive
```
Then after a reboot you should be good to go with your new Soviet-powered PC
## 2. Trying it out on VM

Create a new virtual machine using the previously downloaded image.
![](/assets/virt1.png)
You will need to select your soviet image and dont forget to set the OS to `generic linux 2022`
![](/assets/virt2.png)
This depends on how much resources you want to dedicate, we recommend atleast 4 gigabytes of ram and 2 cores
![](/assets/virt3.png)
Now make the image however big you want to, we recommend atleast 25gb
![](/assets/virt4.png)
Now you can name your VM however you want, but dont forget to set `customize configuration before install` or else it will not work
![](/assets/virt5.png)
Set `Firmware` to `UEFI` and click apply
![](/assets/virt6.png)
Now you can begin the installation
Boot from the installation image. log in as `root` with password `sovietlinux` and run:
```bash
$ /etc/soviet-install.sh /dev/vdb
```
This should typically point to `/dev/vdb`, assuming you followed the tutorial.

Now you are done, you should reboot the VM and boot into Soviet
