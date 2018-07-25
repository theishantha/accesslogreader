#!/bin/bash
#!/bin/awk -f
echo '****Daily User Login****'
cat access.log | awk '{print $1}' | sort -n | uniq -c | sort -nr | head -1000
echo '------------------------------------------------------------------'
echo '****Device Model****'
cat access.log | awk '{print $16}' | sort -n | uniq -c | sort -nr | head -100
echo '------------------------------------------------------------------'
echo '****OS****'
cat access.log | awk '{print $13}' | sort -n | uniq -c | sort -nr | head -100



