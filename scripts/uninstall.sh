#!/bin/bash

# Remove jamf script
rm -f "${MUNKIPATH}preflight.d/jamf"

# Remove jamf.txt file
rm -f "${CACHEPATH}jamf.txt"
