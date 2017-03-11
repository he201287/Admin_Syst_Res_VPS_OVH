TARGETS = console-setup resolvconf mountkernfs.sh ufw pppd-dns hostname.sh apparmor screen-cleanup udev mountdevsubfs.sh procps udev-finish cryptdisks cryptdisks-early hwclock.sh checkroot.sh networking lvm2 urandom checkfs.sh mountnfs-bootclean.sh mountnfs.sh bootmisc.sh mountall-bootclean.sh mountall.sh checkroot-bootclean.sh kmod
INTERACTIVE = console-setup udev cryptdisks cryptdisks-early checkroot.sh checkfs.sh
udev: mountkernfs.sh
mountdevsubfs.sh: mountkernfs.sh udev
procps: mountkernfs.sh udev
udev-finish: udev
cryptdisks: checkroot.sh cryptdisks-early udev lvm2
cryptdisks-early: checkroot.sh udev
hwclock.sh: mountdevsubfs.sh
checkroot.sh: hwclock.sh mountdevsubfs.sh hostname.sh
networking: resolvconf mountkernfs.sh urandom procps
lvm2: cryptdisks-early mountdevsubfs.sh udev
urandom: hwclock.sh
checkfs.sh: cryptdisks checkroot.sh lvm2
mountnfs-bootclean.sh: mountnfs.sh
mountnfs.sh: networking
bootmisc.sh: mountnfs-bootclean.sh mountall-bootclean.sh udev checkroot-bootclean.sh
mountall-bootclean.sh: mountall.sh
mountall.sh: checkfs.sh checkroot-bootclean.sh lvm2
checkroot-bootclean.sh: checkroot.sh
kmod: checkroot.sh
