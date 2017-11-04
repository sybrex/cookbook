#!/usr/bin/env python
import os
import sys
import subprocess

# Setting password for nfs: https://www.vagrantup.com/docs/synced-folders/nfs.html

if len(sys.argv) < 2:
    print 'You should pass argument command: up|halt|status|suspend'
    sys.exit()

command = sys.argv[1]
boxes = [
    '/Users/viktor/vagrant/persistence',
    '/Users/viktor/vagrant/web',
    '/Users/viktor/vagrant/event'
]

for dir in boxes:
    os.chdir(dir)
    subprocess.check_call(['vagrant', command])
