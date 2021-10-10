// %Tag(FULLTEXT)%
#include "ros/ros.h"
#include "std_msgs/String.h"
#include <geometry_msgs/Twist.h>
#include <sstream>

/**
 * This tutorial demonstrates simple sending of messages over the ROS system.
 */
int main(int argc, char **argv)
{

  ros::init(argc, argv, "talker");
  ros::NodeHandle n;
  ros::Publisher twistpub = n.advertise<geometry_msgs::Twist>("turtle1/cmd_vel", 1000);
  
  ros::Rate loop_rate(10);
  int count = 0;
  while (ros::ok())
  {
    geometry_msgs::Twist twist;
    twist.linear.x=count*(count%2);
    twist.angular.z=count*(1-count%2);
    
    twistpub.publish(twist);
    ros::spinOnce();
    loop_rate.sleep();
    ++count;
  }


  return 0;
}
