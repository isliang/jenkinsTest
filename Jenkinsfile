pipeline {
    agent {
        docker {
            image 'composer'        
            args  '-u root'
        }
    }
    stages {
        stage('build') {
            steps {
                sh 'pwd'
            }
        }
        stage('test') {
            steps {
                sh './vendor/bin/phpunit'
            }
	}
        stage('deploy') {
            steps {
		withCredentials(bindings: [sshUserPrivateKey(credentialsId: 'baiduyun')]) {}
                sh '''
                cur_date="`date +%Y.%m.%d`"
                dst_version_file=$cur_date'.version'
                if [ ! -f $dst_version_file ];then
                 echo '0' > $dst_version_file
                fi
                version="`cat $dst_version_file|awk -F '' '{print $1+1}'`"
                echo $version > $dst_version_file
                dst_version=$cur_date'.'$version
                echo $dst_version > ga.version
		git archive --format=tar HEAD | (rm -rf $dst_version && mkdir $dst_version && cd $dst_version && tar xf -)
		cp -r vendor $dst_version/                
		scp -r $dst_version ga.version root@115.28.186.0:/data1/www/htdocs/jenkinsTest/
                '''
            }
        } 
    }
}
