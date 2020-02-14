pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'composer update'
            }
        }
        stage('test') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
        stage('deploy') {
            steps {
                sh 'cur_date="`date +%Y.%m.%d`"
		dst_version_file=$cur_date'.version'
		if [ ! -f $dst_version_file ];then
		 echo '0' > $dst_version_file
		fi
		version="`cat $dst_version_file|awk -F '' '{print $1+1}'`"
		echo $version > $dst_version_file
		dst_version=$cur_date'.'$version
		echo $dst_version > ga.version
		mv jenkinsTest $dst_version'
            }
        }
    }
}
