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

### Step 1: Create a New Virtual Machine

Create a new virtual machine using the previously downloaded image.
![](/assets/virt1.png)
Select your Soviet image and set the OS to `Generic Linux 2022`.
![](/assets/virt2.png)

### Step 2: Configure Resources

Configure the resources for your virtual machine. We recommend allocating at least 4 gigabytes of RAM and 2 cores.
![](/assets/virt3.png)

### Step 3: Name Your VM and Customize Configuration

Name your virtual machine and make sure to select `Customize configuration before install`. This is crucial for the installation to work.
![](/assets/virt4.png)

### Step 4: Delete the existing drives

Set the `Firmware` to `UEFI` and click apply. Delete the existing drives.
![](/assets/virt5.png)
### Step 5: Create CD Drive

Create the root drive for the Soviet installation. Make sure to use virtIO, as the installation may not work without them.
![](/assets/virt6.png)

### Step 6: Create Root Drive

Create the root drive for the Soviet installation. Make sure to use virtIO, as the installation may not work without them.
![](/assets/virt7.png)

### Step 7: Set CDROM as boot device
![](/assets/virt8.png)

### Step 7: Begin Installation

Boot from the installation image. Log in as `root` with the password `sovietlinux` and run the following command:
```bash
$ /etc/soviet-install.sh /dev/vdb
```
This command should typically point to `/dev/vdb`, assuming you followed the tutorial.

### Step 8: Shut Down and Reboot

Shut down the virtual machine and ensure that the virtIO drive is at the top.
![](/assets/virt9.png)
Then, reboot the VM. It should now boot into your new Soviet installation.
